<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_pegawai".
 *
 * @property int $id
 * @property string $nama
 * @property string $posisi
 * @property string $contact_number
 * @property string $email
 * @property string $alamat
 * @property int $kode_pos
 */
class pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'posisi', 'contact_number', 'email', 'alamat', 'kode_pos'], 'required'],
            [['alamat'], 'string'],
            [['kode_pos'], 'integer'],
            [['nama', 'email'], 'string', 'max' => 255],
            [['posisi'], 'string', 'max' => 100],
            [['contact_number'], 'string', 'max' => 50],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'posisi' => 'Posisi',
            'contact_number' => 'Contact Number',
            'email' => 'Email',
            'alamat' => 'Alamat',
            'kode_pos' => 'Kode Pos',
        ];
    }
}
