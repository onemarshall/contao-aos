<?php

/*
 * Register hooks
 */

$GLOBALS['TL_HOOKS']['getContentElement']['aos'] = ['aos.listener.hooks', 'getContentElement'];
