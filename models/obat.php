<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_obat".
 *
 * @property int $id
 * @property string $nama_obat
 * @property string $type
 * @property float $harga
 * @property string $keterangan
 */
class obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'type', 'harga', 'keterangan'], 'required'],
            [['harga'], 'number'],
            [['keterangan'], 'string'],
            [['nama_obat'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_obat' => 'Nama Obat',
            'type' => 'Type',
            'harga' => 'Harga',
            'keterangan' => 'Keterangan',
        ];
    }
}
