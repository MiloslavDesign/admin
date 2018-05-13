<?php
namespace Flextype;
use Flextype\Component\{Http\Http, Registry\Registry};
?>

<?php Themes::template('admin/views/partials/head')->display(); ?>

<h2 class="page-heading">
    Pages
    <a class="btn pull-right btn-black" href="<?php echo Http::getBaseUrl(); ?>/admin/pages/add" role="button">Create New Page</a>
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Url</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($pages_list as $page) { ?>
    <tr>
      <td scope="row"><a href="<?php echo Http::getBaseUrl(); ?>/admin/pages/edit?page=<?php if ($page['slug'] != '') echo $page['slug']; else echo Registry::get('site.pages.main'); ?>"><?php echo $page['title']; ?></a></td>
      <td scope="row"><a href="<?php echo Http::getBaseUrl(); ?>/<?php echo $page['slug']; ?>">/<?php echo $page['slug']; ?></a></td>
      <td scope="row" class="text-right"><a href="<?php echo Http::getBaseUrl(); ?>/admin/pages/delete?page=<?php echo $page['slug']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php Themes::template('admin/views/partials/footer')->display(); ?>