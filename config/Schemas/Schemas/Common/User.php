<?php
return [
    'detail'=>[

            'id'=>[
                'name'=>'编号',
                'tip'=>'',
                'type'=>'number',
                'sql_type'=>'bigint(20) unsigned',
            ],
            'vip'=>[
                'name'=>'vip等级',
                'tip'=>'',
                'type'=>'select',
                'sql_type'=>'bigint(20) unsigned',
                'option'=>[
                    1=>'vip1',
                    2=>'vip2',
                    3=>'vip3',
                ]
            ],
            'name'=>[
                'name'=>'姓名',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
                'rule'=>['required'],
            ],
            'nickname'=>[
                'name'=>'昵称',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'id_card'=>[
                'name'=>'身份证',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
//                'rule'=>['min:15'=>'身份证位数错误','max:18'=>'身份证位数错误'],
            ],
            'home_address'=>[
                'name'=>'家庭住址',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'sex'=>[
                'name'=>'性别',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'api_token'=>[
                'name'=>'api_token',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(64)',
            ],
            'ip'=>[
                'name'=>'ip地址',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'char(15)',
            ],
            'phone'=>[
                'name'=>'电话',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(11)',
                'rule'=>['required','min:11'=>'最小11位','max:11'=>'最大11位']
            ],
            'email'=>[
                'name'=>'邮箱',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'password'=>[
                'name'=>'密码',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'invite_code'=>[
                'name'=>'邀请码',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'balance'=>[
                'name'=>'余额',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'credit_balance'=>[
                'name'=>'信用余额',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'credit'=>[
                'name'=>'信用额',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'monthly'=>[
                'name'=>'是否月结',
                'tip'=>'',
                'type'=>'checkbox',
                'sql_type'=>'varchar(255)',
            ],
            'is_old'=>[
                'name'=>'用户类型',
                'tip'=>'',
                'type'=>'select',
                'sql_type'=>'varchar(255)',
                'option'=>[
                    0=>'新用户',
                    -1=>'未迁移用户',
                    1=>'已迁移老用户',
                ]
            ],
            'openid'=>[
                'name'=>'微信openid',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'unionid'=>[
                'name'=>'微信unionid',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(255)',
            ],
            'user_source'=>[
                'name'=>'用户来源',
                'tip'=>'',
                'type'=>'select',
                'sql_type'=>'varchar(255)',
                'option'=>[1=>'邀请注册',2=>'公众号注册'],
            ],
            'admin' => [
                'name' => '管理用户',
                'tip' => '',
                'type' => 'select',
                'link' => [
                    'model' => [
                        'hasOne',
                        'App\\Models\\User\\UserAdmin',
                        'user_id',
                        'id',
                    ],
                    'with'=>[
                      'roles'
                    ],
                    'as'=>'admin',
//                    'select' => ['id','user_id','name',],
//                    'field' => ['id','user_id','name',],
                ],
            ],
            'company' => [
                'name' => '公司用户',
                'tip' => '',
                'type' => 'select',
                    'link' => [
                        'model' => [
                            'hasOne',
                            'App\\Models\\User\\UserCompany',
                            'user_id',
                            'id',
                        ],
                        'as'=>'company',
                        'select' => ['id','user_id','name',],
                        'field' => ['id','user_id','name',],
                    ],
            ],
            'customer' => [
                'name' => '顾客用户',
                'tip' => '',
                'type' => 'select',
                'link' => [
                    'model' => [
                        'hasOne',
                        'App\\Models\\User\\UserCustomer',
                        'user_id',
                        'id',
                    ],
                    'as'=>'customer',
                    'select' => ['id','user_id','name',],
                    'field' => ['id','user_id','name',],
                ],
            ],
            'remember_token'=>[
                'name'=>'remember_token',
                'tip'=>'',
                'type'=>'text',
                'sql_type'=>'varchar(100)',
            ],
            'created_at'=>[
                'name'=>'注册时间',
                'tip'=>'',
                'type'=>'timestamp',
                'sql_type'=>'timestamp',
            ],
            'updated_at'=>[
                'name'=>'updated_at',
                'tip'=>'',
                'type'=>'timestamp',
                'sql_type'=>'timestamp',
            ],


    ],
];
