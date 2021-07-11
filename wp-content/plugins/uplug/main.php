<?php
/**
 * Plugin Name: My UPlug Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Kazeem Odofin
 * Author URI: http://www.mywebsite.com
 */

require_once(ABSPATH . 'wp-config.php');

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
    mysqli_select_db($connection, DB_NAME);

    $query = mysqli_query($connection, "SELECT * FROM `wp_posts`");

    $content = '<table border="1"><tr>
                    <th>ID</th>
                    <th>Post Title</th>
                    <th>Number of rows</th>
                    </tr><tbody>';
    while($row = mysqli_fetch_array($query)) {
        $content .= '<tr>
                            <td>'.$row['ID'].'</td>
                            <td>'.$row['post_title'].'</td>
                            <td>'.$query->num_rows.'</td>
                        </tr>
                    ';
    }

    $content .= '</tbody></table>';



    return $content;
}
