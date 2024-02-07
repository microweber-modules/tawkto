<?php

$style = get_option('style', $params['id']);
$link = get_option('link', $params['id']);

$icon = get_option('icon', $params['id']);
$icon = html_entity_decode($icon);

$button_text = get_option('button_text', $params['id']);
if (empty($button_text)) {
    $button_text = 'Schedule time with me';
}

if ($icon) {
    $button_text = $icon . ($button_text !== '' ? '&nbsp;' : '') . $button_text;
}

$button_style = get_option('button_style', $params['id']);
if (empty($button_style)) {
    $button_style = '';
}
$button_size = get_option('button_size', $params['id']);
if (empty($button_size)) {
    $button_size = '';
}

$text_color = get_option('text_color', $params['id']);
if (empty($text_color)) {
    $text_color = '#ffffff';
}

$background_color = get_option('background_color', $params['id']);
if (empty($background_color)) {
    $background_color = '#00a2ff';
}

$primary_color = get_option('primary_color', $params['id']);
if (empty($primary_color)) {
    $primary_color = '#00a2ff';
}

$primary_color = str_replace('#', '', $primary_color);
$text_color = str_replace('#', '', $text_color);
$background_color = str_replace('#', '', $background_color);

if (empty($link)) {
    print lnotif(_e("First you must set your Tawk.to link from the module settings!", true));
    return;
}

$module_template = get_module_option('template', $params['id']);

if ($module_template == false and isset($params['template'])) {
    $module_template = $params['template'];
}
if ($module_template != false) {
    $template_file = module_templates($config['module'], $module_template);
} else {
    $template_file = module_templates($config['module'], 'default');
}
if (is_file($template_file)) {
    include($template_file);
}
?>
