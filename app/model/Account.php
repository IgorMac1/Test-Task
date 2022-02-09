<?php

namespace app\model;

use core\Model;

class Account extends Model
{

    public function addNewUser(array $data): void
    {
        $registerDate = time();
        $params = [
            'email' => htmlspecialchars(strtolower($data['email'])),
            'login' => htmlspecialchars(strtolower($data['login'])),
            'name' => htmlspecialchars(strtolower($data['name'])),
            'pass' => htmlspecialchars(md5($data['pass'])),
            'birthday' => htmlspecialchars(strtolower($data['birthday'])),
            'country' => htmlspecialchars(strtolower($data['country'])),
            'date' => $registerDate
        ];
        $this->db->query(
            "INSERT INTO users (email,login,name,pass,birthday,country,date) VALUES (:email,:login,:name,:pass,:birthday,:country,:date)", $params
        );
    }

    public function getUser($email, $pass)
    {
        $params = [
            'email' => htmlspecialchars(strtolower($email)),
            'pass' => htmlspecialchars(md5($pass)),

        ];
        return $this->db->row("SELECT id, name, email FROM users WHERE email = :email AND pass = :pass OR login = :email AND pass = :pass", $params);
    }

    public function getCountry()
    {
        $countryArr = $this->db->getAllRows('SELECT * FROM country');
        return $countryArr;
    }

    public function checkUniqueEmail($email)
    {
        $params = [
            'email' => strtolower($email),
        ];

        return $this->db->row("SELECT email FROM users WHERE email = :email ", $params);
    }

    public function checkUniqueLogin($login)
    {
        $params = [
            'login' => strtolower($login),
        ];

        return $this->db->row("SELECT login FROM users WHERE login = :login ", $params);
    }
}




