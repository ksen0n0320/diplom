<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id_user
 * @property string $name
 * @property string $age
 * @property string $phone
 * @property string $email
 * @property string $nickname_pet
 * @property string $why
 * @property string $kids
 * @property string $other_pet
 * @property string $vet_help
 * @property string $agreement
 * @property string $adaptation
 * @property int $status_id
 * @property int $admin
 *
 * @property Pet $pet
 */
class User extends ActiveRecord implements IdentityInterface
{
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return self::find()->where(['email'=> $email])->one();
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

   /* public function validatePassword($password) 
    {
        return $this->password === static::hashPassword($password); //Сверьте хэшированный пароль с паролем, введенным пользователем
    }
    public static function hashPassword($password) // Функция для создания хэша пароля
    {
        $salt = "danilova0320";
        return md5($password.$salt);
    }*/

    public function getId()
    {
        return $this->id_user;
    }

    public function getAuthKey()
    {
        return;
    }

    public function validateAuthKey($authKey)
    {
        return;
    }
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'age', 'phone', 'email', 'nickname_pet', 'why', 'kids', 'other_pet', 'vet_help', 'agreement', 'adaptation'], 'required'],
            [['admin'], 'integer'],
            [['email'], 'unique'],
            [['name'], 'match', 'pattern'=>'/^[а-яёА-ЯЁ]{2,}$/', 'message'=>'Используйте русские буквы'],
            [['age'], 'integer', 'min' => 20],
            [['name','password','nickname_pet'], 'string', 'max' => 50],
            [['age', 'email', 'kids', 'other_pet', 'vet_help', 'agreement', 'adaptation'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 17],
            [['password'], 'match', 'pattern'=>'/^[A-Za-z0-9]{4,}$/', 'message'=>'Используйте минимум 5 латинских букв и цифр'],
            [['why'], 'string', 'max' => 1000],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id_status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'name' => 'Имя',
            'age' => 'Возраст',
            'phone' => 'Телефон',
            'email' => 'Почта',
            'password'=> 'Пароль',
            'nickname_pet' => 'Кличка питомца',
            'why' => 'Почему хотите взять питомца из приюта?',
            'kids' => 'Есть ли в семье дети? Сколько им лет?',
            'other_pet' => 'Какие животные проживают у вас сейчас?',
            'vet_help' => 'Сможете ли вы обеспечить животному при необходимости ветеринарную помощь в ветклинике?',
            'agreement' => 'Согласны ли вы в будущем сообщать приюту информацию о животном из дома (выслать фотографии и историю)? При предварительной договоренности разрешить навестить кошку волонтеру?',
            'adaptation' => 'ПРЕДУПРЕЖДАЕМ: любому животному нужно время, чтобы освоиться на новом месте – тем более, что в приюте чаще всего оказываются не из-за хорошей жизни. Поэтому забирая кошку из приюта, учтите, что в период адаптации к новому дому животное может испытывать проблемы с лотком, портить вещи, стены и мебель, вы можете быть оцарапаны и укушены. Вы готовы к вышеперечисленным трудностям?',
            'status_id' => 'Статус',
            'admin' => 'Администратор',
            
        ];
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id_status' => 'status_id']);
    }
}
