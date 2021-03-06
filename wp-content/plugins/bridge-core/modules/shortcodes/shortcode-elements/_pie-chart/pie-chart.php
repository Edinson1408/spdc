<?php
/* Pie Chart shortcode */
if (!function_exists('bridge_core_pie_chart')) {

    function bridge_core_pie_chart($atts, $content = null) {
        $args = array(
            "title"                 => "",
            "title_color"           => "",
            "title_tag"             => "h4",
            "percent"               => "",
            "percentage_color"      => "",
            "percent_font_size"     => "",
            "percent_font_weight"   => "",
            "active_color"          => "",
            "noactive_color"        => "",
            "line_width"            => "",
            "text"                  => "",
            "text_color"            => "",
            "separator"           	=> "yes",
            "separator_color"       => "",
            "element_appearance"    => ""
        );

        extract(shortcode_atts($args, $atts));

        $headings_array = array('h2', 'h3', 'h4', 'h5', 'h6');

        //get correct heading value. If provided heading isn't valid get the default one
        $title_tag = (in_array($title_tag, $headings_array)) ? $title_tag : $args['title_tag'];
		$q_percentage_data = array();

		if($percent != '') {
			$q_percentage_data['data-percent'] = $percent;
		}
		if($line_width != '') {
			$q_percentage_data['data-linewidth'] = $line_width;
		}

		if($active_color != '') {
			$q_percentage_data['data-active'] = $active_color;
		}
		if($noactive_color != '') {
			$q_percentage_data['data-noactive'] = $noactive_color;
		}
		if($element_appearance != '') {
			$q_percentage_data['data-element-appearance'] = $element_appearance;
		}

        $html = '';
        $html .= '<div class="q_pie_chart_holder"><div class="q_percentage" ' . bridge_qode_get_inline_attrs($q_percentage_data);
        if ($percentage_color != "" || $percent_font_size != "" || $percent_font_weight != "") {
            $html .= ' style="';

            if($percentage_color != ""){
                $html .= 'color:'.$percentage_color.';';
            }
            if($percent_font_size != ""){
                $html .= 'font-size:'.$percent_font_size.'px;';
            }
            if($percent_font_weight != ""){
                $html .= 'font-weight:'.$percent_font_weight.';';
            }
            $html .= '"';
        }
        $html .= '><span class="tocounter">' . $percent . '</span>%';
        $html .= '</div><div class="pie_chart_text">';
        if ($title != "") {
            $html .= '<'.$title_tag.' class="pie_title"';
            if ($title_color != "") {
                $html .= ' style="color: ' . $title_color . ';"';
            }
            $html .= '>' . $title . '</'.$title_tag.'>';
        }
        $separator_styles = "";
        if($separator_color != "") {
            $separator_styles .= " style='background-color: ".$separator_color.";'";
        }

        if($separator == "yes") {
            $html .= '<span class="separator small"'.$separator_styles.'"></span>';
        }

        if ($text != "") {
            $html .= '<p';
            if($text_color != ""){
                $html .= ' style="color: '.$text_color.';"';
            }
            $html .= '>' . $text . '</p>';
        }
        $html .= "</div></div>";
        return $html;
    }
    add_shortcode('pie_chart', 'bridge_core_pie_chart');
}