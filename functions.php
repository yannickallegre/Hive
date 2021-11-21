<?php
// functions.php

function display_recipe(array $recipe) : string
{
	$recipe_content = '';

	if ($recipe['is_enabled']) {
		$recipe_content = '<article>';
			$recipe_content .= '<header>';
				$recipe_content .= '<h3>' . $recipe['title'] . '</h3>';
			$recipe_content .= '</header>';

			$recipe_content .= '<div>' . $recipe['recipe'] . '</div>';

			$recipe_content .= '<footer>';
				$recipe_content .= '<i>' . $recipe['author'] . '</i>';
			$recipe_content .= '</footer>';
		$recipe_content .= '</article>';
	}

	return $recipe_content;
}

function display_author(string $authorEmail, array $users) : string
{
	for ($i = 0; $i < count($users); $i++) {
		$author = $users[$i];
		if ($authorEmail === $author['email']) {
			return $author['full_name'] . ' (' . $author['age'] . ' ans)';
		}
	}
}

function isValidRecipe(array $recipe) : bool
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } else {
        $isEnabled = false;
    }

    return $isEnabled;
}

function get_recipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}
