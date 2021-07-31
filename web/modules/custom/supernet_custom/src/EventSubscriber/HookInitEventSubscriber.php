<?php

namespace Drupal\supernet_custom\EventSubscriber;

use \Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Drupal\node\Entity\Node;

class HookInitEventSubscriber implements EventSubscriberInterface {

  public static function getSubscribedEvents() {

    $events[KernelEvents::CONTROLLER][] = array('onLoad');

    return $events;
  }

// @Handle this feature using cron now...I tried previously to load in each page..but it's not a good idea.
//  public function onLoad(FilterControllerEvent $event) {
//    $nids = \Drupal::entityQuery('node')->condition('status', 1)->condition('field_status', 1)->condition('type', 'customer')->execute();
//    $current_path = \Drupal::service('path.current')->getPath();
//    if($current_path == '/customer-billing-cycle') {
//      foreach ($nids as $nid) {
//        $node = Node::load($nid);
//        //$node = \Drupal::entityTypeManager()->getStorage('node')->load($nid);
//        $internet_start_date = $node->get('field_internet_start_date')->getValue();
//        $internet_start_date = $internet_start_date[0]['value'];
//        $internet_start_day  = date("d", strtotime('+1 month', strtotime($internet_start_date)));
//        // Plan Expired in current month
//        $current_month_due_date  = $internet_start_day. '-' . date('F'). '-' . date('Y');
//        $current_month_due_timestamp = strtotime($current_month_due_date);
//        $today_timestamp             = strtotime(date('d-F-Y', time()). '00:00:00');
//
//        if ($today_timestamp > $current_month_due_timestamp) {
//          $node->set('field_payment_status', 0);
//          $node->save();
//        }
//      }
//    }
//  }

}