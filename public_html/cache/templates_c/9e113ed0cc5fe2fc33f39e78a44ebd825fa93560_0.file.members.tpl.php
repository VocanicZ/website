<?php
/* Smarty version 4.3.1, created on 2023-06-01 08:02:32
  from '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/members/members.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6477ee2865c5d0_12156119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e113ed0cc5fe2fc33f39e78a44ebd825fa93560' => 
    array (
      0 => '/home/u302265335/domains/rainbowcreation.net/public_html/custom/templates/Cobalt/members/members.tpl',
      1 => 1685580388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6477ee2865c5d0_12156119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u302265335/domains/rainbowcreation.net/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">

<?php if ((isset($_smarty_tpl->tpl_vars['ERROR']->value))) {?>
<div class="alert alert-danger">
        <?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

</div>
<?php }?>

    <div class="row">
        <div class="col-lg-3">


        <div class="user-nav">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MEMBER_LIST_URL']->value;?>
" class="user-nav-link<?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "overview") {?> active<?php }?>"><?php echo $_smarty_tpl->tpl_vars['OVERVIEW']->value;?>
</a>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SIDEBAR_MEMBER_LISTS']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['list']->value->url();?>
" class="user-nav-link<?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == $_smarty_tpl->tpl_vars['list']->value->getName()) {?> active<?php }?>"><i class="<?php if ($_smarty_tpl->tpl_vars['list']->value->getIcon()) {
echo $_smarty_tpl->tpl_vars['list']->value->getIcon();
} else { ?>dot circle icon<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['list']->value->getFriendlyName();?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['GROUPS']->value)) {?>
                <div class="card">
                    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['VIEW_GROUP']->value;?>
</div>
                    <div class="card-body">
                            <select class="form-control" onchange="viewGroup(this)">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['GROUP']->value;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['VIEWING_GROUP']->value['id'] == $_smarty_tpl->tpl_vars['group']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                    </div>
                </div>
            <?php }?>
            <div class="card">
                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['NEW_MEMBERS']->value;?>
</div>
                <div class="card-body">
                        <div class="row" id="new-members-grid" style="margin-right: -10px; margin-left: -10px">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NEW_MEMBERS_VALUE']->value, 'member');
$_smarty_tpl->tpl_vars['member']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->do_else = false;
?>
                                <div class="col-md-3" style="padding-right: 10px; padding-left: 10px; ">
                                    <a class="d-block mb-3" href="<?php echo $_smarty_tpl->tpl_vars['member']->value->getProfileUrl();?>
" data-toggle="popup" data-poload="<?php echo $_smarty_tpl->tpl_vars['USER_INFO_URL']->value;
echo $_smarty_tpl->tpl_vars['member']->value->data()->id;?>
">
                                        <img class="avatar-img w-100" src="<?php echo $_smarty_tpl->tpl_vars['member']->value->getAvatar();?>
" alt="<?php echo $_smarty_tpl->tpl_vars['member']->value->getDisplayname();?>
">
                                    </a>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                </div>
            </div>
        </div>
            <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "group" || smarty_modifier_count($_smarty_tpl->tpl_vars['MEMBER_LISTS_VIEWING']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "group") {?>
                        <div class="col-lg-9">
                            <div class="card members-card">
                                <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['VIEWING_GROUP']->value['name'];?>
</div>
                                <div class="card-body">
                                    <div id="member_list_group_<?php echo $_smarty_tpl->tpl_vars['VIEWING_GROUP']->value['id'];?>
">
                                </div>
                                    <div class="pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>
                                </div>
                            </div>
                        </div>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBER_LISTS_VIEWING']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "overview") {?>col-lg-3<?php } else { ?>col-lg-9<?php }?>">
                                <div class="card members-card">
                                    <div class="card-header header-theme"><?php echo $_smarty_tpl->tpl_vars['list']->value->getFriendlyName();?>
</div>
                                    <div class="card-body">
                                        <div id="member_list_<?php echo $_smarty_tpl->tpl_vars['list']->value->getName();?>
">
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "overview") {?>
                                        <a class="btn btn-secondary mt-2" href="<?php echo $_smarty_tpl->tpl_vars['list']->value->url();?>
"><?php echo $_smarty_tpl->tpl_vars['VIEW_ALL']->value;?>
</a>
                                    <?php } else { ?>
                                        <div class="pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>
                                    <?php }?>
                                    </div>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
            <?php } else { ?>
                <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['NO_OVERVIEW_LISTS_ENABLED']->value;?>
</div>
            <?php }?>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    const viewGroup = (e) => {
        window.location.href = '<?php echo $_smarty_tpl->tpl_vars['VIEW_GROUP_URL']->value;?>
' + e.value;
    }
    const renderList = (name) => {
        const list = document.getElementById('member_list_' + name);
        list.innerHTML = '<div class="ui active centered inline loader"></div>';
        fetch(
            '<?php echo $_smarty_tpl->tpl_vars['QUERIES_URL']->value;?>
'
                .replace('{{list}}', name)
                .replace('{{page}}', new URLSearchParams(window.location.search).get('p') ?? 1)
        )
            .then(async response => {
                const data = await response.json();
                if (data.length === 0) {
                    list.parentElement.innerHTML = '<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['NO_MEMBERS_FOUND']->value;?>
</div>';
                    return;
                }
                list.innerHTML = '';
                for (const member of data) {
                    const mainDiv = document.createElement('div');
                    mainDiv.classList.add('mb-3', 'd-flex', 'members-container');
                    mainDiv.onclick = () => window.location.href = member.profile_url;
                    const contentDiv = document.createElement('div');
                    contentDiv.classList.add('flex-grow-1');
                    const avatarDiv = document.createElement('img');
                    avatarDiv.classList.add('avatar-img', 'members-staff-av');
                    avatarDiv.setAttribute('src', member.avatar_url);
                    <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "overview") {?>
                        contentDiv.appendChild(avatarDiv);
                    <?php } else { ?>
                        mainDiv.appendChild(avatarDiv);
                    <?php }?>
                    const nameDiv = document.createElement('span');
                    nameDiv.style = member.group_style;
                    nameDiv.classList.add('username');
                    <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value != "overview") {?>
                        nameDiv.innerHTML = member.username + '&nbsp;' + member.group_html.join('');
                    <?php } else { ?>
                        nameDiv.innerText = member.username;
                    <?php }?>
                    contentDiv.appendChild(nameDiv);
                    <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value != "overview") {?>
                        const metaDiv = document.createElement('div');
                        metaDiv.classList.add('description');
                        const metaSpan = document.createElement('span');
                        metaSpan.classList.add('ui', 'text', 'small');
                        const memberMeta = member.metadata;
                        metaSpan.innerHTML = Object.keys(memberMeta).map(key => key + ': ' + memberMeta[key]).join(' &middot; ');
                        metaDiv.appendChild(metaSpan);
                        contentDiv.appendChild(metaDiv);
                    <?php }?>
                    mainDiv.appendChild(contentDiv);
                    list.appendChild(mainDiv);
                    const countDiv = document.createElement('div');
                    countDiv.classList.add('members-count');
                    if (member.count !== null) {
                        const countHeader = document.createElement('h3');
                        countHeader.classList.add('ui');
                        countHeader.innerText = member.count;
                        countDiv.appendChild(countHeader);
                        mainDiv.appendChild(countDiv);
                    }
                }
        });
    }
    window.onload = () => {
        <?php if ($_smarty_tpl->tpl_vars['VIEWING_LIST']->value == "group") {?>
            renderList('group_<?php echo $_smarty_tpl->tpl_vars['VIEWING_GROUP']->value['id'];?>
');
        <?php } else { ?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MEMBER_LISTS_VIEWING']->value, 'list');
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
?>
                renderList('<?php echo $_smarty_tpl->tpl_vars['list']->value->getName();?>
');
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        $('.ui.search')
            .search({
                minCharacters: 2,
                maxResults: 5,
                selectFirstResult: true,
                fields: {
                    title: 'username',
                    description: 'nickname',
                    image: 'avatar_url',
                    url: 'profile_url',
                },
                apiSettings: {
                    url: '<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
&search={query}&limit=5'
                },
                error: {
                    noResultsHeader: "<?php echo $_smarty_tpl->tpl_vars['NO_RESULTS_HEADER']->value;?>
",
                    noResults: "<?php echo $_smarty_tpl->tpl_vars['NO_RESULTS_TEXT']->value;?>
",
                }
            })
        ;
    }
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
