<?php

$arrHTML = array('p'=>'paragraph');

echo page();

function page()
{
    $html = '<html>';
    $html .= head('Title');
    $html .= body('Paragraph');
    $html .= '</html>';

    return $html;
}

function head($title)
{
    $html = '<head>';
    $html .= '<title>' . $title . '</title>';
    $html .= '</head>';

    return $html;
}

function body($contents)
{
    $html = '<body>';
    foreach($arrHTML as $tag=>$body)
    {
        var_dump($tag, $body, $arrHTML);
        $html .= '<' . $tag . '>' . $body . '<' . $tag . '/>';
    }
    $html .= '</body>';

    return $html;
}

?>