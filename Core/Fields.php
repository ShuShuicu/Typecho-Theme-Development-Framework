<?php
/**
 * Fields Functions
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeFields($layout)
{
    // 定义字段配置
    $fieldElements = [
        [
            // Text
            'type' => 'Text',
            'name' => 'TTDF_Fields_Text',
            'value' => null,
            'label' => '文本框',
            'description' => '这是一个文本框~'
        ],
        [
            // Textarea
            'type' => 'Textarea',
            'name' => 'TTDF_Fields_Textarea',
            'value' => null,
            'label' => '文本域',
            'description' => '这是一个文本域~'
        ],
        [
            // Radio
            'type' => 'Radio',
            'name' => 'TTDF_Fields_Radio',
            'value' => 'option1', // 默认选中的值
            'label' => '单选框',
            'description' => '这是一个单选框~',
            'options' => [
                'option1' => '选项一',
                'option2' => '选项二',
                'option3' => '选项三'
            ]
        ],
        [
            // Select
            'type' => 'Select',
            'name' => 'TTDF_Fields_Select',
            'value' => 'option2', // 默认选中的值
            'label' => '下拉框',
            'description' => '这是一个下拉框~',
            'options' => [
                'option1' => '选项一',
                'option2' => '选项二',
                'option3' => '选项三'
            ]
        ],
        [
            // Checkbox
            'type' => 'Checkbox',
            'name' => 'TTDF_Fields_Checkbox',
            'value' => ['option1', 'option3'], // 默认选中的值（数组）
            'label' => '多选框',
            'description' => '这是一个多选框~',
            'options' => [
                'option1' => '选项一',
                'option2' => '选项二',
                'option3' => '选项三'
            ]
        ]
    ];

    // 循环添加字段
    foreach ($fieldElements as $field) {
        $layout->addItem(TTDF_FormElement(
            $field['type'],
            $field['name'],
            $field['value'] ?? null,
            $field['label'] ?? '',
            $field['description'] ?? '',
            $field['options'] ?? []
        ));
    }
}