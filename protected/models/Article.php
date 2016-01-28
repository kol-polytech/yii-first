<?php


class Article extends CActiveRecord
{
	
	public function tableName()
	{
		return 'article';
	}

	
	public function rules()
	{
		
		return array(
			array('title, content', 'required'),
			array('title', 'length', 'max'=>255),
			
			array('id, user_id, title, content', 'safe', 'on'=>'search'),
		);
	}

	
	public function relations() {

        return array(
            'author' => array(self::BELONGS_TO, 'User', 'user_id'),
            'comments' => array(self::MANY_MANY, 'Comment', 'article_id'),
        );
    }

    public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'user_id' => 'USER_ID',
			'title' => 'Title',
			'content' => 'Content',
		);
	}

	
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
                $criteria->compare('user_id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
