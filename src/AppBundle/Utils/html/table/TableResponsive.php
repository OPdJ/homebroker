<?php
/**
 * Created by PhpStorm.
 * User: jonsilva
 * Date: 19/04/2018
 * Time: 10:41
 */

namespace AppBundle\Utils\html\table;


/**
 *
 * Gerando uma tabela para a
$table = [
    'title' => 'Cargos',
    'path' => [
        'insert' => 'cargo-inserir',
        'edit' => 'cargo-editar',
    '   delete' => 'cargo-excluir'
    ],
    'fields' => [
        'nome' => 'Nome' // array de campos com a propriedade da entidade e nome da coluna da tabela
    ],
    'entries' => $cargos //arraycCollection doctrine com entidades
];
 */
class TableResponsive
{
    private $table = [];
    private $title;
    private $path = [];
    private $fields = [];
    private $entries = [];

    public function __construct($title, $entries)
    {
        $this->entries = $entries;
        $this->title = $title;
    }

    public function addPath($keyPath, $valuePath) {
        $this->path[$keyPath] = $valuePath;
    }

    public function setPath($valueInsert, $valueEdit, $valueDelete) {
        $this->path = [
            'insert' => $valueInsert,
            'edit' => $valueEdit,
            'delete' => $valueDelete,
        ];
    }

    public function getPath() {
        return $this->path;
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
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param mixed $entries
     */
    public function setEntries($entries)
    {
        $this->entries = $entries;
    }

    public function toArray()
    {
        return $this->table = [
            'title' => $this->getTitle(),
            'path' => $this->getPath(),
            'fields' => $this->getFields(),
            'entries' => $this->getEntries()
        ];
    }

}