<?php
// This file contains Portuguese (Brazilian) translations for the Kialo
// plugin.  Only strings customised for the Mindscape Feed integration are
// defined here.  Moodle will fall back to the English strings for any
// undefined keys.

defined('MOODLE_INTERNAL') || die();

// Additional strings for the Mindscape Feed integration.
// "Debates da semana" names the page that lists weekly debates.
// "Nenhum debate ativo no momento." is shown if there are no debates.
$string['debatesweek'] = 'Debates da semana';
$string['noactivedebates'] = 'Nenhum debate ativo no momento.';

// ======= Traduções principais do Kialo =======
// As traduções abaixo replicam as strings existentes no arquivo de idioma em inglês.
// Sem estas definições, a interface do plugin mostra identificadores como [[kialoname]]
// em vez de rótulos legíveis. Para manter o plugin utilizável em português,
// fornecemos traduções básicas ou as deixamos em inglês quando apropriado.

// Termos de serviço e textos de aceitação.
$string['acceptterms'] = 'Aceitar Termos de Serviço';
$string['acceptterms_desc'] = 'Para habilitar o plugin Kialo é necessário aceitar os <a href="{$a->terms}" target="_blank">Termos de Serviço</a> em nome de todos os usuários desta instância Moodle. Consulte também nossa <a href="{$a->privacy}" target="_blank">Política de Privacidade</a> e nosso <a href="{$a->data_security}" target="_blank">Plano de Segurança e Privacidade de Dados</a>.';

// Mensagem de fechamento após seleção.
$string['close_prompt'] = 'Você pode fechar esta janela agora.';

// Campos do formulário.
$string['kialoname'] = 'Nome da atividade';
$string['discussion_title'] = 'Discussão';
$string['select_discussion'] = 'Selecionar discussão';
$string['select_discussion_help'] = 'Abre o Kialo em uma nova guia para selecionar uma discussão para esta atividade. Você pode criar uma conta Kialo durante esse processo se ainda não tiver uma.';

// Opções de exibição.
$string['display'] = 'Exibição';
$string['display_embed'] = 'Exibir incorporado';
$string['display_new_window'] = 'Exibir em nova janela';
$string['display_label'] = 'Exibição';
$string['display_help'] = 'Escolha como a discussão Kialo deve ser exibida no Moodle. Por padrão, ela será incorporada.';

// Erros comuns.
$string['errors:deeplinking'] = 'Algo deu errado ao selecionar a discussão. Por favor, tente novamente.';
$string['errors:invalidrequest'] = 'Requisição inválida';
$string['errors:ltiauth'] = 'A autenticação falhou devido a um erro inesperado. Por favor, tente novamente.';
$string['errors:missingcourseid'] = 'ID do curso ausente';
$string['errors:missingdiscussionurl'] = 'URL da discussão ausente';
$string['errors:missingidtoken'] = 'Token de identificação ausente';
$string['errors:missingsessiondata'] = 'Dados de sessão ausentes';
$string['errors:noguestaccess'] = 'Visitantes não podem acessar esta atividade. Faça login.';
$string['errors:nopermissiontoview'] = 'Você não tem permissão para visualizar esta atividade.';
$string['errors:resourcelink'] = 'Esta atividade não pode ser exibida devido a um erro inesperado. Tente novamente.';
$string['errors:updaterecordfailed'] = 'Falha ao atualizar o registro do Kialo';

// Outros textos.
$string['redirect_loading'] = 'Carregando';
$string['redirect_title'] = 'Carregando';
$string['showmore'] = 'Mostrar mais';
$string['kialofieldset'] = 'Conjunto de campos Kialo';
$string['kialourl'] = 'URL do Kialo';
$string['kialourl_desc'] = 'A URL da instância Kialo que será usada. Deixe em branco para usar a instância padrão (edu-prod) ou o valor da variável de ambiente TARGET_KIALO_URL.';
$string['modulename'] = 'Discussão Kialo';
$string['modulenameplural'] = 'Discussões Kialo';
$string['pluginname'] = 'Discussão Kialo';
$string['pluginadministration'] = 'Editar Discussão Kialo';