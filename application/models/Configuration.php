<?php

/**
 * Created by PhpStorm.
 * User: Mahefa
 * Date: 30/03/2017
 * Time: 14:28
 */
class Confirguration extends BaseModele
{
    private $table = 'AS_CONFIGURATION';
    private $id;
    private $libelle;
    private $val;
    private $desce;

    /**
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * @param string $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * @param mixed $val
     */
    public function setVal($val)
    {
        $this->val = $val;
    }

    /**
     * @return mixed
     */
    public function getDesce()
    {
        return $this->desce;
    }

    /**
     * @param mixed $desce
     */
    public function setDesce($desce)
    {
        $this->desce = $desce;
    }

    //Fonction pour ajouter une configuration
    public function insert()
    {
        $this->db->set('ID', $this->getId());
        $this->db->set('LIBELLE', $this->getLibelle());
        $this->db->set('VAL', $this->getVal());
        $this->db->set('DESCE', $this->getDesce());
        $this->db->insert($this->getTable());
    }

    //Fonction pour mettre à jour une configuration
    public function update()
    {
        $this->db->set('LIBELLE', $this->getLibelle());
        $this->db->set('VAL', $this->getVal());
        $this->db->set('DESCE', $this->getDesce());
        $this->db->where('ID', (int)$this->getId());
        return $this->db->update($this->getTable());
    }

    //Fonction pour avoir l'heure de commande minimum actuelle
    public function date_heureCommandeMin(){
        $date = date('Y-m-d');
        $heure = date('H:i');
        $resultat = array(''=>'',''=>'');
        return $resultat;
    }
}