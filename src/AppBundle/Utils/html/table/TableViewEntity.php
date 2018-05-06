<?php
/**
 * Created by PhpStorm.
 * User: Jonatan
 * Date: 25/04/2018
 * Time: 21:50
 */

namespace AppBundle\Utils\html\table;


use AppBundle\Entity\BaseEntity;

class TableViewEntity
{
    private $table = [];
    private $title;
    private $paths = [];
    private $fields = [];
    /** @var  BaseEntity $entity */
    private $entity;

    /**
     * TableViewEntity constructor.
     * @param $title
     * @param BaseEntity $entity
     */
    public function __construct($title, BaseEntity $entity)
    {
        $this->title = $title;
        $this->entity = $entity;
    }

    public function addPath($keyPath, $valuePath) {
        $this->paths[$keyPath] = $valuePath;
    }

    public function setPath($valueInsert, $valueEdit, $valueDelete) {
        $this->paths = [
            'insert' => $valueInsert,
            'edit' => $valueEdit,
            'delete' => $valueDelete,
        ];
    }

    public function getPaths() {
        return $this->paths;
    }

    public function addField($keyEntity, $keyTable) {
        $this->fields[$keyEntity] = $keyTable;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }



    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param mixed $entries
     */
    public function setEntity($entity)
    {
        $this->entries = $entity;
    }

    public function toArray()
    {
        return $this->table = [
            'title' => $this->getTitle(),
            'paths' => $this->getPaths(),
            'fields' => $this->getFields(),
            'entries' => $this->getEntity()
        ];
    }
}