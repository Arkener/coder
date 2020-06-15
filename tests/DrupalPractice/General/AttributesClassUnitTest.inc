<?php

$form['lorem'] = [
  '#type' => 'textfield',
  '#attributes' => [
      'class' => 'lorem-text',
  ],
];

$form['lorem']['#attributes']['class'] = 'lorem-textfield';

$form['ipsum'] = [
    '#type' => 'textfield',
    '#attributes' => [
        'class' => ['ipsum-text'],
    ],
];

$form['ipsum']['#attributes']['class'][] = 'ipsum-textfield';