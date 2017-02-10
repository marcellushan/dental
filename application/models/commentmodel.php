<?php

class CommentModel extends My_Model {
	
	const DB_TABLE = 'comment';
	const DB_TABLE_PK = 'comment_id';

	public $comment;
	public $submission_date;
	public $applicant_id;
    public $admin_id;
	
	
}