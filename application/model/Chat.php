<?php
// namespace application\model;
// use application\core\Model;

class Chat extends Model
{
	public function getUserInfo($id){
		$sql = 'SELECT `id`, `first_name` FROM `mans` WHERE `id` = :id';

		$query = $this->db;
		$result = $query->prepare($sql);
		$result->bindParam(':id', $id);
		$result->execute();
		$userInfo = $result->fetch(\PDO::FETCH_ASSOC);

		if($userInfo)
		{
			return $userInfo;
		}
		else
		{
			return false;
		}
	}

	public function getDialog($from_u, $to_u){
		$sql = "SELECT `user_from`, `time`, `txt` FROM `messages` WHERE `user_from` in(:from_u, :to_u) AND `user_to` in(:from_u, :to_u) ORDER BY `id` ASC";
		$query = $this->db;
		$result = $query->prepare($sql);
		$result->bindParam(':from_u', $from_u);
		$result->bindParam(':to_u', $to_u);
		$result->execute();
		$dialog = $result->fetchAll(\PDO::FETCH_ASSOC);

		if($dialog)
		{
			return $dialog;
		}
		else
		{
			echo "\nPDO::errorInfo():\n";
			print_r($result->errorInfo());
			return false;
		}
	}

	public function saveMessage($msg_data){
		$sql = "INSERT INTO messages(`id`, `date`, `time`, `user_from`, `user_to`, `txt`) VALUES('', :_date, :_time, :_from, :to, :msg)";
		$query = $this->db;
		$result = $query->prepare($sql);
		$result->bindParam(':from_u', $from_u);
		$result->bindParam(':to_u', $to_u);
		$result->execute(array(
			"_date" => $msg_data['date'],
			"_time" => $msg_data['time'],
			"_from" => $msg_data['from'],
			"to" => $msg_data['to'],
			"msg" => $msg_data['msg']
			));

		if($result)
		{
			return true;
		}
		else
		{
			echo "\nPDO::errorInfo():\n";
			print_r($result->errorInfo());
			return false;
		}
	}
}
?>