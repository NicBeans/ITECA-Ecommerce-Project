<?php
namespace App\Models;

use App\Models\Database;

class User
{
    private $db;
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function create($username, $email, $password)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $this->db->query('INSERT INTO SebKorArt.userdata (username, email, password) VALUES (:username, :email, :password)');
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashed_password);
        $this->db->execute();
    }
    public function update(int $id)
    {
        $this->db->query('UPDATE SebKorArt.userdata SET username = :username, email = :email, password = :password WHERE id = :id');
        $this->db->bind(':username', $this->username);
        $this->db->bind(':email', $this->email);
        $this->db->bind(':password', $this->password);
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function delete(int $id)
    {
        return $this;
    }
    public function read()
    {
        return $this;
    }
    public function createUser($username, $email, $password)
    {
        $hashed_password = password_hash($password, '2y');
        $this->db->query('INSERT INTO SebKorArt.userdata (username, email, password) VALUES (:username, :email, :password)');
        $this->db->bind(':username', $name);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashed_password);
        return $this->db->execute();
    }
//     public function getUserByEmailOrUsername(string $email = null, string $username = null)
//     {
//         if ($email) {
//             $this->db->query('SELECT * FROM SebKorArt.userdata WHERE email = :email');
//             $this->db->bind(':email', $email);
//             $user = $this->db->single();
//             if ($user) {
//                 $this->id = $user['id'];
//                 $this->username = $user['username'];
//                 $this->email = $user['email'];
//                 $this->password = $user['password'];
//             } else {
//                 $this->id = null;
//             }
//         } elseif ($username) {
//             $this->db->query('SELECT * FROM SebKorArt.userdata WHERE name = :name');
//             $this->db->bind(':name', $username);
//             $user = $this->db->single();
//             if ($user) {
//                 $this->id = $user['id'];
//                 $this->name = $user['name'];
//                 $this->email = $user['email'];
//                 $this->password = $user['password'];
//             } else {
//                 $this->id = null;
//             }
//         } else {
//             $this->id = null;
//         }
//         return $this->id;
//     }
// }
public function getUserByEmail(string $email = null)
    {
        if ($email) {
            $this->db->query('SELECT * FROM SebKorArt.userdata WHERE email = :email');
            $this->db->bind(':email', $email);
            $user = $this->db->single();
            if ($user) {
                $this->id = $user['id'];
                $this->username = $user['username'];
                $this->email = $user['email'];
                $this->password = $user['password'];
            } else {
                $this->id = null;
            }
        }  else {
            $this->id = null;
        }
        return $this->id;
    }
}