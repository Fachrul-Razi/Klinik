<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tb_tindakan".
 *
 * @property int $id
 * @property string $nama_tindakan
 * @property float $biaya
 * @property string $keterangan
 */
class tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tb_tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_tindakan', 'biaya', 'keterangan'], 'required'],
            [['biaya'], 'number'],
            [['keterangan'], 'string'],
            [['nama_tindakan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_tindakan' => 'Nama Tindakan',
            'biaya' => 'Biaya',
            'keterangan' => 'Keterangan',
        ];
    }
}
