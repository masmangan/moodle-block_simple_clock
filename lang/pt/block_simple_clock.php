<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * Simple clock block language strings for Brazilian Portuguese
 *
 * @package    contrib
 * @subpackage block_simple_clock
 * @copyright  2013 Marco Mangan
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Clock strings
$string['after_noon'] = 'pm';
$string['before_noon'] = 'am';
$string['clock_separator'] = ':';

// Config strings and help
$string['clock_title_default'] = 'Relógio';
$string['config_clock_visibility'] = 'Visibilidade dos relógios';
$string['config_clock_visibility_help'] = '<p>Defina os relógios que o usuário pode ver:</p>
<ul>
    <li>horário do servidor,</li>
    <li>horário no seu próprio computador, ou</li>
    <li>ambos.</li>
</ul>';
$string['config_header'] = 'Mostrar cabeçalho';
$string['config_header_help'] = '
<p>With this setting, you can control whether the block header, including the title, will be shown.</p>
<p style="background:yellow;border:3px dashed black;padding:10px;"><strong>Note</strong><br />
While "Editing" is turned on, the header of the block will be shown to teachers/administrators.
When "Editing" is turned off, the header will be hidden.
While this setting set to No, students will not see the header, regardless of whether "Editing" is on or off.</p>
';
$string['config_icons'] = 'Mostrar ícones';
$string['config_icons_help'] = '
<p>Esta configuração determina se as ícones são apresentadas ao lado de cada relógio.</p>
<p>The site icon is shown next to the "server" label. The user\'s icon image is shown next to their clock.</p>
';
$string['config_day'] = 'Mostrar a data';
$string['config_day_help'] = '
<p>Mostrar a data oferece informação útil para estudantes em zonas horárias diferentes da do servidor.</p>
';
$string['config_seconds'] = 'Mostrar segundos';
$string['config_seconds_help'] = '
<p>Showing seconds will show users the time including seconds on all visible clocks.</p>
<p style="background:yellow;border:3px dashed black;padding:10px;"><strong>Warning</strong><br />
The initial time shown is the time when the page was created.
When this page content arrives at the user\'s browser, the time difference will include a delay
(usually a few seconds). This is often acceptable as any interaction with Moodle will
involve a delay, but the delay will be more evident with seconds shown.</p>
';
$string['config_show_both_clocks'] = 'Mostrar ambos relógios (servidor e local)';
$string['config_show_server_clock'] = 'Mostrar apenas o relógio do servidor';
$string['config_show_user_clock'] = 'Mostrar apenas o relógio local';
$string['config_show_puc_clock'] = 'Mostrar relógio da PUCRS';
$string['config_show_puc_clock_help'] = '
<p>Esta configuração determina se o relógio da PUCRS é apresentado.</p>
<p>O relógio da PUCRS está sincronizado com o horário do servidor.</p>
';


$string['config_title'] = 'Novo título';
$string['config_title_help'] = '
<p>This setting allows the block title to be changed.</p>
<p>If no alternate is provided, the default title is used.</p>
<p>If the block header is hidden, the title will not appear.</p>
';

// Other strings
$string['day_names'] = 'Dom,Seg,Ter,Qua,Qui,Sex,Sáb'; // Preserve this format
$string['javascript_disabled'] = 'Habilite o uso de JavaScript no seu navegador para permitir que os relógios se atualizem.';
$string['loading'] = 'Aguarde...';
$string['pluginname'] = 'Relógio';
$string['server'] = 'Servidor';
$string['simple_clock:myaddinstance'] = 'Insira um novo bloco Simple Clock block na página My Moodle';
$string['simple_clock:addinstance'] = 'Insira um novo bloco Simple Clock';
$string['you'] = 'Local';
$string['puc'] = 'PUCRS';
