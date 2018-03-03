<?php

// Load views for schema builder
Route::get('schema', 'SchemaController@index');

// Generate database migration files
Route::post('schema', 'SchemaController@generateMigration');