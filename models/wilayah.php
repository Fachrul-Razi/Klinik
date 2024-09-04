<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_wilayah".
 *
 * @property int $id
 * @property string $kode_wilayah
 * @property string $nama_wilayah
 * @property string $alamat tuliskan alamat
 */
class wilayah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_wilayah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_wilayah', 'nama_wilayah', 'alamat'], 'required'],
            [['alamat'], 'string'],
            [['kode_wilayah'], 'string', 'max' => 100],
            [['nama_wilayah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_wilayah' => 'Kode Wilayah',
            'nama_wilayah' => 'Nama Wilayah',
            'alamat' => 'Alamat',
        ];
    }
}
