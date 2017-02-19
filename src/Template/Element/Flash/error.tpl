{if (!isset($params['escape']) || $params['escape'] !== false)}
    {assign var="message" value=$message|escape}
{/if}
<div class="message error" onclick="this.classList.add('hidden');">{$message}</div>
