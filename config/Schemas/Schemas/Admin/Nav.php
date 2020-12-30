<?php
return [
    'detail'=>[
        
            'id'=>[
                'name'=>'id',
                'tip'=>'',
                'type'=>'text',
            ],
            'catid'=>[
                'name'=>'菜单分类',
                'tip'=>'',
                'type'=>'text',
            ],
            'name'=>[
                'name'=>'菜单名称',
                'tip'=>'',
                'type'=>'text',
//                'rule'=>['required'],
            ],
            'parent_id'=>[
                'name'=>'父菜单项id',
                'tip'=>'',
                'type'=>'select',
                'link' => [
                    'model' =>[
                        'belongsTo',
                        'App\\Models\\Admin\\AdminNav',
                        'id',
                        'parent_id',
                    ],
                    'select' => ['id','name'],
                    'fields' => ['id','name'],
                ],
            ],
            'url'=>[
                'name'=>'url',
                'tip'=>'',
                'type'=>'text',
            ],
            'class'=>[
                'name'=>'图标class',
                'tip'=>'',
                'type'=>'text',
            ],
            'module'=>[
                'name'=>'是否使用module',
                'tip'=>'',
                'type'=>'text',
            ],
            'ranking'=>[
                'name'=>'排序',
                'tip'=>'',
                'type'=>'text',
            ],
            'status'=>[
                'name'=>'状态',
                'tip'=>'(程序中默认只读取开启状态 1 开启 0 关闭)',
                'type'=>'checkbox',
            ],
            'created_at'=>[
                'name'=>'创建时间',
                'tip'=>'',
                'type'=>'timestamp',
            ],
            'updated_at'=>[
                'name'=>'更新时间',
                'tip'=>'',
                'type'=>'timestamp',
            ],
    ],
];