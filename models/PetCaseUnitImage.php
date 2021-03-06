<?php

namespace app\models;


/**
 * This is the model class for table "pet_case_unit_image".
 *
 * @property integer $id
 * @property string $image_path
 * @property string $image_info
 * @property integer $pet_case_unit
 * @property string $md5
 *
 * @property PetCaseUnit $petCaseUnit
 */
class PetCaseUnitImage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pet_case_unit_image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image_path'], 'string'],
            [['image_info'], 'string'],
            [['pet_case_unit'], 'integer'],
            [['pet_case_unit'], 'exist', 'skipOnError' => true, 'targetClass' => PetCaseUnit::className(), 'targetAttribute' => ['pet_case_unit' => 'id']],
//            [['md5'], 'string'],
//            [['md5'], 'exist', 'skipOnError' => true, 'targetClass' => PetCaseUnitImage::className(), 'targetAttribute' => ['md5' => 'md5']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image_path' => 'Image Path',
            'image_info' => 'Image Info',
            'pet_case_unit' => 'Pet Case Unit',
//            'md5' => 'MD5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPetCaseUnit()
    {
        return $this->hasOne(PetCaseUnit::className(), ['id' => 'pet_case_unit']);
    }

    /**
     * delete images related to given unit id
     * @param $unit_id
     */
    public static function cleanup($unit_id)
    {
        PetCaseUnitImage::deleteAll(['pet_case_unit' => $unit_id]);
    }
}
