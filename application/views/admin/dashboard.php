<h1>Админка</h1>

<table>
    <tr>
        <td>Username</td>
        <td>Birth</td>
        <td>Email</td>
        <td>Дата регистрации</td>
        <td>Город</td>
        <td>Статус</td>
    </tr>
    <?php foreach ($data['usersList']['mans'] as $user){ ?>
        <tr>
            <td><?=$user['username'] ?></td>
            <td><?=$user['birth'] ?></td>
            <td><?=$user['email'] ?></td>
            <td><?=$user['date_created'] ?></td>
            <td><?=$user['locale'] ?></td>
            <td><?=$user['active'] ?></td>
        </tr>
    <?php } ?>
</table>
<hr>
<table>
    <tr>
        <td>Username</td>
        <td>Birth</td>
        <td>Email</td>
        <td>Дата регистрации</td>
        <td>Город</td>
        <td>Статус</td>
    </tr>
    <?php foreach ($data['usersList']['ladies'] as $user){ ?>
        <tr>
            <td><a href="/profile/edit/<?= $user['user_id'] ?>"><?=$user['username'] ?> </a></td>
            <td><?=$user['birth'] ?></td>
            <td><?=$user['email'] ?></td>
            <td><?=$user['date_created'] ?></td>
            <td><?=$user['locale'] ?></td>
            <td><?=$user['active'] ?></td>
        </tr>
    <?php } ?>
</table>