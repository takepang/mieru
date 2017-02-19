<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => 'id プライマリkey', 'autoIncrement' => true, 'precision' => null],
        'username' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ユーザー名', 'precision' => null, 'fixed' => null],
        'loginid' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ログインID', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'メールアドレス', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'パスワード', 'precision' => null, 'fixed' => null],
        'temp_pass' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'テンポラリーパスワード', 'precision' => null, 'fixed' => null],
        'temp_limit_time' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'テンポラリーパスワード解除時刻', 'precision' => null],
        'last_change_pass_time' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '最終パスワード変更時刻', 'precision' => null],
        'last_login_time' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '最終ログイン時刻', 'precision' => null],
        'salt' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'ソルト', 'precision' => null, 'fixed' => null],
        'reset' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'パスワードリセットフラグ 0) 通常時 1) リセット時', 'precision' => null, 'autoIncrement' => null],
        'group_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'グループテーブル外部参照キー', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => 'ユーザーステータス 0) 非アクティブ 1) アクティブ', 'precision' => null],
        'create_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '登録日時', 'precision' => null],
        'update_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '更新日時', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'username' => 'Lorem ipsum dolor sit amet',
            'loginid' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'temp_pass' => 'Lorem ipsum dolor sit amet',
            'temp_limit_time' => '2017-02-08 09:04:49',
            'last_change_pass_time' => '2017-02-08 09:04:49',
            'last_login_time' => '2017-02-08 09:04:49',
            'salt' => 'Lorem ipsum dolor sit amet',
            'reset' => 1,
            'group_id' => 1,
            'status' => 1,
            'create_at' => '2017-02-08 09:04:49',
            'update_at' => '2017-02-08 09:04:49'
        ],
    ];
}
