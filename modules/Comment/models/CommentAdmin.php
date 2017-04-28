<?php

use Models\AdminModel;

class CommentAdmin extends AdminModel
{
    protected $table = 'comments';


    public function find($id)
    {
        return $this->db
            ->from($this->table)
            ->where('id', $id)
            ->get()
            ->row();
    }

    public function all($paginate = [])
    {
        $this->setFilter();
        $this->setPaginate($paginate);

        return $this->db
            ->from($this->table)
            ->order_by("id", 'asc')
            ->get()
            ->result();
    }


    public function count()
    {
        $this->setFilter();

        return $this->db
            ->from($this->table)
            ->count_all_results();
    }


    public function update($record, $data = array())
    {
        $this->db
            ->where('id', $record->id)
            ->update($this->table, array(
                'content' => $this->input->post('content'),
                'status' => $this->input->post('status'),
                'updatedAt' => $this->date->set()->mysqlDatetime()
            ));

        if ($this->db->affected_rows() > 0) {
            $record = $this->find($record->id);

            return $record;
        }

        return false;
    }



    public function delete($data)
    {
        return parent::callDelete($this->table, $data);
    }

}