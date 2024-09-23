<?php

//get page database
function read_page_data($page) {
	$filePath = "../data/pages/$page.json";
	if ( file_exists($filePath) ) {
		$json = file_get_contents($filePath);
		$pageData = json_decode($json, true);
	} else {
		$pageData = null;
	}
	return $pageData;
}


// getting updated time

function getLatestUpdateTime($dir) {
    $latestTime = 0;
    $files = scandir($dir);

    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $filepath = $dir . '/' . $file;
            if (is_dir($filepath)) {
                // Recursive call for directories
                $latestTime = max($latestTime, getLatestUpdateTime($filepath));
            } else {
                if (is_file($filepath)) {
                    $modTime = filemtime($filepath);
                    if ($modTime > $latestTime) {
                        $latestTime = $modTime;
                    }
                }
            }
        }
    }

    // Return the latest timestamp or null if no valid timestamp was found
    return $latestTime > 0 ? $latestTime : null;
}

// getting exercise for programmers page for router

function get_exercise_template($name) {
	include("../exercises-for-programmers-forms/$name.php");
}

function get_article_template($name) {
	include("../pages/work-detail/$name/template.php");
}

function get_layout_garden_template($module) {
	include("../modules/layout-garden/$module/template.php");
}

/* can consolidate these functions ... standard variable naming */

function get_article_by_slug($database, $slug_to_match) {
    foreach ($database['articles'] as $article) {
        if ($article['slug'] === $slug_to_match) {
            return $article;
        }
    }
    return null;
}

function get_exercise_by_slug($database, $slug_to_match) {
    foreach ($database as $exercise) {
        if ($exercise['slug'] === $slug_to_match) {
            return $exercise;
        }
    }
    return null;
}

function get_layout_by_slug($database, $slug_to_match) {
    foreach ($database as $layout) {
        if ($layout['slug'] === $slug_to_match) {
            return $layout;
        }
    }
    return null;
}

/* ------------ */

function sorted_articles($articles) {
	usort($articles, function($a, $b) {
		return strtotime($b['published']) - strtotime($a['published']);
	});
	return $articles;
}

function get_site_scripts($exercise) {
	if(file_exists("scripts/$exercise.js")) {
		return "scripts/$exercise.js";
	}
}

function get_exercise_scripts($slug) {
	if (file_exists("../exercises-for-programmers-forms/scripts/$slug.js")) {
		return "../exercises-for-programmers-forms/scripts/$slug.js";
	}
}

// for linking to top level files on local server
function get_file($path) {
	return dirname(__FILE__) . "/" . $path;
}

// CRUD Functions
function read($path) {
	$json = file_get_contents($path);
	return json_decode($json, true);
}

function create($database, $data) {
	$database[] = $data;
	return $database;
}

function save($path, $database) {
	$encodedJson = json_encode($database);
	file_put_contents($path, $encodedJson);
}

function update(&$database, $this_data_id, $new_data) {
	foreach ($database as &$data) {
		if ($data["id"] == $this_data_id) {
			$data = $new_data;
			break;
		}
	}
	return $database;
}

function delete($database, $data_id) {
	$filtered = [];
	
	foreach ($database as $data) {
		if ($data["id"] !== $data_id) {
			array_push($filtered, $data);
			}
		}
	return $filtered;
}

// formatting php highlight code
function highlight_code($path) {
	ini_set('highlight.string', '#2AA198');
	ini_set('highlight.keyword', '#859900');
	ini_set('highlight.default', '#D33682');
	return highlight_file($path);
}


// For showing associative array when submitting info
function display_code($code) {
	echo "<pre><code>";
	print_r($code);
	echo "</code></pre>";
	}

// For formatting decimals to the hundredths place

function format_decimals($number) {
	$decimalPosition = strpos(strval($number), ".");
	if ($decimalPosition !== false) {
		return number_format($number, 2, '.', '');
	} else {
		return $number;
	}
}

function format_money($money){
	return number_format($money, 2, '.', '');
}