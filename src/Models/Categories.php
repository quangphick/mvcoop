<?php 

namespace Hai\NsPsr4\Models;

use Hai\NsPsr4\Commons\Model;

class Categories extends Model
{
    protected string $tableName = 'categories';
    

    public function all(){
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->orderBy('id','desc')
            ->fetchAllAssociative();
    }

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select('*')
            ->from($this->tableName)
            ->orderBy('id','desc')
            ->fetchAllAssociative();

        return [$data, $totalPage];
    }
    
    public function findByID($id)
    {
        return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->where('id = ?')
        ->setParameter(0, $id)
        ->fetchAssociative();
    }
}