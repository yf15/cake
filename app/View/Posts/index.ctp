<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table class = "table table-condensed">
    <thead>
    <tr>
        <th>Title</th>
        <th>Options</th>
        <th>Created</th>
    </tr>
<!-- Here's where we loop through our $posts array, printing out post info -->
</thead>
<tbody>
<?php foreach ($posts as $post): ?>
    <tr>

        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],
                    array('action' => 'view', $post['Post']['id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
                       <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
<?php endforeach; ?>

<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>




</tbody>
</table>