<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * FSPHP | Class User Active Record Pattern
 *
 * @author Robson V. Leite <cursos@upinside.com.br>
 * @package Source\Models
 */
class User extends Model
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", ["id"], ["name", "email", "cpf", "telefone", "data_nasc", "password", "status"]);
    }

    /**
     * @param string $name
     * @param string $email
     * @param string $cpf
     * @param string $telefone
     * @param string $data_nasc
     * @param string $password


     * @return $this
     */
    public function bootstrap(
        string $name,
        string $email,
        string $cpf,
        string $telefone,
        string $data_nasc,
        string $password,
        string $status




    ): User {
        $this->name = $name;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->data_nasc = $data_nasc;
        $this->password  = $password;
        $this->status = $status;



        return $this;
    }



    /**
     * @param string $email
     * @param string $columns
     * @return null|User
     */
    public function findByEmail(string $email, string $columns = "*"): ?User
    {
        $find = $this->find("email = :email", "email={$email}", $columns);
        return $find->fetch();
    }

    public function findByCpf(string $cpf, string $columns = "*"): ?User
    {
        $find = $this->find("cpf = :cpf", "cpf=$cpf", $columns);
        return $find->fetch();
    }

    /**
     * @return string|null
     */
    public function photo(): ?string
    {
        if ($this->photo && file_exists(__DIR__ . "/../../" . CONF_UPLOAD_DIR . "/{$this->photo}")) {
            return $this->photo;
        }

        return null;
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->required()) {
            $this->message->warning("Nome, email e senha são obrigatórios");
            return false;
        }

        if (!is_email($this->email)) {
            $this->message->warning("O e-mail informado não tem um formato válido");
            return false;
        }

        //limpando a mascara do cpf
        $this->cpf = preg_replace('/\D/', '', $this->cpf);

        if (!is_cpf($this->cpf)) {
            $this->message->warning("O CPF informado não é válido");
            return false;
        }

        // limpando a mascara do telefone antes de salvar
        $this->telefone = preg_replace('/\D/', '', $this->telefone);

        if (!is_passwd($this->password)) {
            $min = CONF_PASSWD_MIN_LEN;
            $max = CONF_PASSWD_MAX_LEN;
            $this->message->warning("A senha deve ter entre {$min} e {$max} caracteres");
            return false;
        } else {
            $this->password = passwd($this->password);
        }

        /** User Update */
        if (!empty($this->id)) {
            $userId = $this->id;

            if ($this->find("email = :e AND id != :i", "e={$this->email}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }

            if ($this->find("cpf = :e AND id != :i", "e={$this->cpf}&i={$userId}", "id")->fetch()) {
                $this->message->warning("O CPF informado já está cadastrado");
                return false;
            }

            $this->update($this->safe(), "id = :id", "id={$userId}");
            if ($this->fail()) {
                $this->message->error("Erro ao atualizar, verifique os dados");
                return false;
            }
        }

        /** User Create */
        if (empty($this->id)) {
            if ($this->findByEmail($this->email, "id")) {
                $this->message->warning("O e-mail informado já está cadastrado");
                return false;
            }

            if ($this->findByCpf($this->cpf, "id")) {
                $this->message->warning("O CPF informado já está cadastrado");
                return false;
            }

            $userId = $this->create($this->safe());
            if ($this->fail()) {
                $this->message->error("Erro ao cadastrar, verifique os dados");
                return false;
            }
        }

        $this->data = ($this->findById($userId))->data();
        return true;
    }
}