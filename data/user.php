<?php
class User
{
	private $pdo;
    
    public $id;
    public $name;
    public $user;
    public $type;
    public $email;
    public $password;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Show()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM users");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Search($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM users WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Delete($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM users WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Update($data)
	{
		try 
		{
			$sql = "UPDATE users SET 
						name     = ?, 
						type     = ?,
                        user     = ?,
						email    = ?, 
						password = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->name, 
                        $data->type,
                        $data->user,
                        $data->email,
                        md5($data->password),
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Create(User $data)
	{
		try 
		{
		$sql = "INSERT INTO users (name,type,user,email,password) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->name,
                    $data->type, 
                    $data->user, 
                    $data->email,
                    md5($data->password)
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}