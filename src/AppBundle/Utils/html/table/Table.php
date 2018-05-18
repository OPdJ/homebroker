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
class Table
{
    const TWIG = 'element/table/table.html.twig';

    // Exemplos na url
    //https://blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/tables.html
    const BASIC_TABLE     = 1;
    const DATA_TABLE      = 2;
    const KITCHEN_SINK    = 3;
    const STRIPED_ROWS    = 4;
    const BORDERED_TABLE  = 5;
    const HOVER_ROWS      = 6;

    //class
    const BASIC_TABLE_CLASS     = 'table ';
    const DATA_TABLE_CLASS      = 'table table-striped table-bordered table-hover ';
    const KITCHEN_SINK_CLASS    = 'table table-striped table-bordered table-hover ';
    const STRIPED_ROWS_CLASS    = 'table table-striped ';
    const BORDERED_TABLE_CLASS  = 'table table-bordered ';
    const HOVER_ROWS_CLASS      = 'table table-hover ';

    private $columns = [];
    private $rows = [];
    private $paths = [];
    private $fields = [];
    private $type = Table::BASIC_TABLE;
    private $class;
    private $msgNotFoundResults = 'Nenhum resultado encontrado.';

    /**
     * Table constructor.
     * @param string $type
     */
    public function __construct($type = Table::BASIC_TABLE)
    {
        $this->type = $type;
        $this->setClassForType($type);
    }


    /**
     * @param $value - nome da coluna
     */
    public function addColumn($value)
    {
        array_push($this->columns, new Column($value));
    }

    /**
     * @param $arrayColumns - array de string com o nome
     * das colunas a ser exibido para o usuário
     */
    public function addArrayColumn($arrayColumns)
    {
        foreach ($arrayColumns as $nome) {
            array_push($this->columns, new Column($nome));
        }
    }

    /**
     * @param array $row
     */
    public function addRow($row)
    {
        array_push($this->rows, $row);
    }

    /**
     * @param $nameField - nome do campo que representa a linha da coluna
     */
    public function addField($nameField) {
        array_push($this->fields, $nameField);
    }

    /**
     * @param $arrayFields - array de string com o nome
     * das propriedades do objeto com o array de linhas
     * a ser exibido na table
     */
    public function addArrayFields($arrayFields)
    {
        foreach ($arrayFields as $field) {
            array_push($this->fields, $field);
        }
    }

    public function addPath($keyPath, $valuePath) {
        $this->paths[$keyPath] = $valuePath;
    }

    public function setPaths($pathInsert, $pathEdit, $pathDelete) {
        $this->paths = [
            'insert' => $pathInsert,
            'edit' => $pathEdit,
            'delete' => $pathDelete,
        ];
    }

    /**
     * @return array
     */
    public function getPaths()
    {
        return $this->paths;
    }

    /**
     * @return array - com objetos do tipo Column
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * @return array
     */
    public function getRows()
    {
        return $this->rows;
    }

    /**
     * @param array $rows
     */
    public function setRows(array $rows)
    {
        $this->rows = $rows;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields(array $fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getMsgNotFoundResults()
    {
        return $this->msgNotFoundResults;
    }

    /**
     * @param string $msgNotFoundResults
     */
    public function setMsgNotFoundResults(string $msgNotFoundResults)
    {
        $this->msgNotFoundResults = $msgNotFoundResults;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class .= $class;
    }

    private function setClassForType($type) {
        if ($type == Table::BASIC_TABLE) {
            $this->class = Table::BASIC_TABLE_CLASS;
        }
        elseif ($type == Table::DATA_TABLE) {
            $this->class = Table::DATA_TABLE_CLASS;
        }
        elseif ($type == Table::KITCHEN_SINK) {
            $this->class = Table::KITCHEN_SINK_CLASS;
        }
        elseif ($type == Table::STRIPED_ROWS) {
            $this->class = Table::STRIPED_ROWS_CLASS;
        }
        elseif ($type == Table::BORDERED_TABLE) {
            $this->class = Table::BORDERED_TABLE_CLASS;
        }
        elseif ($type == Table::HOVER_ROWS) {
            $this->class = Table::HOVER_ROWS_CLASS;
        }
        else {
            $this->class = Table::BASIC_TABLE_CLASS;
        }
    }
}