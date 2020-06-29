<?php
/**
@NB : Do not modify array structure
An users database
*/
/**
 *
 */




class Users {

// The variable being private means that it can only be accessed in this class
private $users = [
["id"=>1,"name"=>"Kemboi atanai","email" => "kemboi@example.com","admin"=>1,"gender"=>0],
["id"=>2,"name"=>"Mathew","email" => "mathew@example.com","admin"=>0,"gender"=>1],
["id"=>3,"name"=>"Dii","email" => "dii@example.com","admin"=>0,"gender"=>1],
["id"=>4,"name"=>"Babu","email" => "babu@example.com","admin"=>0,"gender"=>0],
["id"=>5,"name"=>"Emma","email" => "emma@example.com","admin"=>0,"gender"=>1],
["id"=>6,"name"=>"Nancy","email" => "nancy@example.com","admin"=>1,"gender"=>0],
["id"=>7,"name"=>"Kevo","email" => "kevo@example.com","admin"=>1,"gender"=>1],
["id"=>8,"name"=>"Babie vah","email" => "vah@example.com","admin"=>0,"gender"=>0],
["id"=>9,"name"=>"Brian","email" => "brian@example.com","admin"=>0,"gender"=>0],
["id"=>10,"name"=>"Kamau pundo","email" => "pundo@example.com","admin"=>1,"gender"=>0],
["id"=>11,"name"=>"Vic","email" => "vic@example.com","admin"=>0,"gender"=>1]
];

// to get the name and email of the users
public function get_name_and_email()
{
for($i=0 ;$i<count($this->users);$i++){

$data1 = $this->users[$i];

  echo "name   :   " .$data1['name']. " Email  :   ".$data1['email']."</br>";
}
}


// class to get the name of all female users
public function female_users_name()
{
  for($i=0 ;$i<sizeof($this->users);$i++){
  $data2 = $this->users[$i];

  $gender=$data2['gender'];

if($gender==1)
{
echo "name   ==>>   " .$data2['name']. "</br>";
}

}
}



//return users with two names
public function with_two_names()
{
  for($i=0 ;$i<count($this->users);$i++){

  $data3 = $this->users[$i];
  $name_data =  $data3['name'];

  if ($name_data == trim($name_data) && strpos($name_data, ' ') !== false) {

        echo 'name : '.$name_data.'</br>';
  }
}
}

  public function access_users()
  {
     $userext = $this->users;// hold the details of the private variable $users
  for($i=0 ;$i<count($userext);$i++){

      $data4 = $userext[$i];
    $admin=$data4['admin'];
if($admin==1){
  $admin_name=$data4["name"];
  echo "admin = ".  $admin_name.'</br>';
  }
}

}

}

class Admin extends Users
{

public function Admin_fetch()
{
//creating an instance of the class
$userext = new Users();
return $userext->access_users();
}
}


$user_fetch=new Users(); // instantiating the class users
$admin_fetched = new Admin();



$sample = $user_fetch->access_users();
 echo"</br>";
$details=$user_fetch->get_name_and_email();
echo"</br>";
 $details2=$user_fetch->female_users_name();
 echo"</br>";
$details3 =$user_fetch->with_two_names();
 echo"</br>";
  $details4=$admin_fetched->Admin_fetch();

?>