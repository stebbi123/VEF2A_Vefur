<?php
	/**
		 * @name: Users
		 * @role:  manages all database transactions in database for user
		 * @version:  1.1.0
		 * @author:  Sigurður R Ragnarsson, Gunnar Þ
		 * @since:	 22.01.2015
		 * @system:  VEF2A3U - Tækniskólinn
		 */
	class Users
	{
		private $connection; // for PDO connection inside the class
	
		/**
		 * The class Constructor
		 * 
		 *  when you have a PDO connection outside of your class and cant use that connection inside the class, 
		 *  send that PDO object to the constructor as a parameter.
		 *  
		 *  @usage example:  $pdo_object = new PDO('mysql:host=localhost;dbname=kennitala_PictureBase','user','pw');
		 *        			 $dbUser = new Users($pdo_object);
		 * 
		 *  @param PDO obj
		 *
		 */

		public function __construct($connection_name)
		{
			include'connection.php';
			if(!empty($connection_name)){

				$this->connection = $connection_name;
			}
			else{
				throw new Exception("cant connect to database");
			}
		}
		
		/**
		*	@function name:  newUser
		*
		*	This function inserts a new user in the database. It 
		*	returns true if the operation succeded  or false if it didn't
		*
		* @usage example:  $db_object->newUser('John',Doe','jd@fakemail.ru','jodo','12345');
		*
		* @param  string	first_name
		* @param  string	last_name
		* @param  string	user_email
		* @param  string	user_name
		* @param  string	user_pass
		*
		* @returns boolean
		* @returns boolean
		*/
		public function newUser($name, $email, $password)
		{
			include 'connection.php';
			if (isset($_POST['submit'])) {
				try {
					$stmt = $connection->prepare('INSERT INTO users ("name, email, password") VALUES (:name, :email, :password)');

					$stmt->bindParam(':name', $name);
					$stmt->bindParam(':email', $email);
					$stmt->bindParam(':password', $password);

					$name = $_POST['user'];
					$email = $_POST['email'];
					$password = $_POST['password'];	
					$stmt->execute();

					echo "nýr user kominn";
					
				} catch (Exception $e) {
					echo $e;
				}
			}
		}
		
		/**
		*	@function name:  getUser
		*
		*  This function returns information about a single user in the database.
		*
		* @usage example:  $db_object->getUser(666);
		*
		* @param  int  user_id
		*
		* @returns array
		*/
		public function getUser($user_id)
		{
			$statement = $this->connection->prepare('call GetUser(?)');
			$statement->bindParam(1,$user_id);
			
			try 
			{
				$statement->execute();
				
				$row = $statement->fetch(PDO::FETCH_NUM);
				return $row;
			}
			catch(PDOException $e)
			{
				return array();
			}
		}
		
		
		/**
		*	@function name:  getUser
		*
		*	The function returns a list of currently active users 
		*
		* @usage example:	$db_object->userList();
		*
		*	@returns array
		*/
		public function userList()
		{
			$statement = $this->connection->prepare('call UserList()');
			
			try 
			{
				$arr = array();
				$statement->execute();
				
				while ($row = $statement->fetch(PDO::FETCH_NUM)) 
				{
					array_push($arr,$row);
				}
				return $arr;
			}
			catch(PDOException $e)
			{
				return array();
			}
		}
	
		/**
		*	@function name:  updateUser
		*
		*	This function updates info about a single user in the database.  
		*	It returns true if it succees otherwise false.
		*
		* @usage example:	$db_object->updateUser(999,'Jean',Doe','jd@nofakemail.vg','jeodeo','54321');
		*
		*	@param  int  userI_id
		*	@param  string  first_name
		*	@param  string  last_name
		*	@param  stirng  user_email
		*	@param  string  user_name
		*	@param  string  user_pass
		*
		*	@returns boolean
		*/
		public function updateUser($userI_id,$first_name,$last_name,$user_email,$user_name,$user_pass)
		{
			$statement = $this->connection->prepare('call UpdateUser(?,?,?,?,?,?)');
			$statement->bindParam(1,$userI_id);
			$statement->bindParam(2,$first_name);
			$statement->bindParam(3,$last_name);
			$statement->bindParam(4,$user_email);
			$statement->bindParam(5,$user_name);
			$statement->bindParam(6,$user_pass);
			
			try 
			{
				$statement->execute();
				
				return true;
			}
			catch(PDOException $e)
			{
				return false;
			}
		}
	
		/**
		*	@function name:  deleteUser
		*
		*	This function deletes a single user from the database.  
		*	TIt returns true if the delete action was successful otherwise false.
		*
		*	@usage example:	$db_object->deleteUser(999);
		*
		*	@param  int  user_id
		*
		*	@returns boolean
		*/
		public function deleteUser($user_id)
		{
			$statement = $this->connection->prepare('call DeleteUser(?)');
			$statement->bindParam(1,$user_id);
			
			try 
			{
				$statement->execute();
				
				return true;
			}
			catch(PDOException $e)
			{
				return false;
			}
		}
		
		/**
		*	@function name:  resetUser
		*
		*	The function resets a user that has been deleted.
		*	 It returns true if the reset was successful, otherwise false.
		*
		*	@usage example:	$db_object->resetUser(999);
		*
		*	@param  int  user_id
		*
		*	@returns boolean
		*/
		public function resetUser($user_id)
		{
			$statement = $this->connection->prepare('call ResetUser(?)');
			$statement->bindParam(1,$user_id);
			
			try 
			{
				$statement->execute();
				
				return true;
			}
			catch(PDOException $e)
			{
				return false;
			}
		}
		
		/**
		*	@function name:  setAccessLevel
		*
		*	This function changes the current access level of a particular user.
		*	It needs to be run by someone with administrative privileges and
		*	therefore it needs a user id from an admin.
		*  The function returns the new accesslevel if it is successful but 0 otherwise.
		*
		*	@usage example:	$db_object->setAccessLevel(2,666,1250)
		*
		*	@param  int  access_level
		*	@param  int  user_id
		*	@param  int  admin_id
		*
		*	@returns int
		*/
		public function setAccessLevel($access_level,$user_id,$admin_id)
		{
			$statement = $this->connection->prepare('select SetAccessLevel(?,?,?)');
			$statement->bindParam(1,$access_level);
			$statement->bindParam(2,$user_id);
			$statement->bindParam(3,$admin_id);
			
			try 
			{
				$statement->execute();
				$row = $statement->fetch(PDO::FETCH_NUM);
				
				return $row[0];
			}
			catch(PDOException $e)
			{
				return 0;
			}
		}

		/**
		*	@function name:  validateUser
		*
		*  This function validates the user against the database.
		*	If the username and password are found, it returns 
		*	true. If not it returns false
		*
		*	@usage example:	$db_object->validateUser('joedoe','12345');
		*
		*	@param string  user_name
		*	@param string  user_pass
		*
		*	@returns  boolean
		*/
		public function validateUser($user_name,$user_pass)
		{
			$statement = $this->connection->prepare('select ValidateUser(?,?)');
			$statement->bindParam(1,$user_name);
			$statement->bindParam(2,$user_pass);
			
			$ret = false;
			
			try 
			{
				$statement->execute();
				$row = $statement->fetch(PDO::FETCH_NUM);
				
				if($row[0] == 1)
					$ret = true;
			}
			catch(PDOException $e)
			{
				$ret = false;
			}
			
			return $ret;
		}
	
		
	}
?>