<?php
class Course extends CI_Model {

	public function add($name, $desc)
	{
		$query = "INSERT INTO courses (title, description, created_at) VALUES (?,?,?)";
		$values = array($name, $desc, date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
	}

	public function retrieveAll()
	{
		$query = "SELECT id, title, description, created_at FROM courses";
        return $this->db->query($query)->result_array();		
	}

	public function delete($id)
	{
		$query = "DELETE FROM courses WHERE id = ?";
		$values = array($id);
		return $this->db->query($query, $values);		
	}

	public function retrieveOne($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	
}
?>