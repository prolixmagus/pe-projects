<?php
function renameCssToScss(array $directories) {
    foreach ($directories as $directory) {
        $cssFiles = glob($directory . '/*.css');
        
        foreach ($cssFiles as $cssFile) {
            // Generate the new filename with .scss extension
            $scssFile = str_replace('.css', '.scss', $cssFile);
            
            // Rename the file from .css to .scss
            if (rename($cssFile, $scssFile)) {
                echo "Renamed $cssFile to $scssFile\n";
            } else {
                echo "Failed to rename $cssFile\n";
            }
        }
    }
}

// Define the directories
$directories = [
    realpath(__DIR__ . '/styles'),
    realpath(__DIR__ . '/modules'),
    realpath(__DIR__ . '/pages').
    realpath(__DIR__ . '/exercises-for-programmers')
];

// Run the function to rename CSS files to SCSS
renameCssToScss($directories);

echo "CSS files renamed to SCSS files.\n";
?>