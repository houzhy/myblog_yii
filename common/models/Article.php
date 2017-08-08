<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property string $article_id
 * @property string $subject
 * @property string $cover
 * @property string $summary
 * @property string $content
 * @property string $status
 * @property integer $create_at
 * @property integer $is_delete
 * @property string $category_id
 * @property string $user_id
 *
 * @property Category $category
 * @property User $user
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'status'], 'string'],
            [['create_at', 'is_delete', 'category_id', 'user_id'], 'integer'],
            [['subject'], 'string', 'max' => 64],
	        // 检查 "primaryImage" 是否为 PNG, JPG 或 GIF 格式的上传图片。
	        // 文件大小必须小于  1MB
	        [['cover'], 'file', 'extensions' => ['png', 'jpg', 'gif'], 'maxSize' => 1*1024*1024,'message'=>'选择正确格式jpg,png,gif文件','wrongExtension'=>'选择正确格式jpg,png,gif文件'],
            [['summary'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'article_id' => 'ID',
            'subject' => '文章标题',
            'cover' => '文章封面',
            'summary' => '文章摘要',
            'content' => '文章内容',
            'status' => 'P发布&S保存',
            'create_at' => '创建时间',
            'is_delete' => '文章是否被删除',
            'category_id' => '文章所属分类ID',
            'user_id' => '文章作者id',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
