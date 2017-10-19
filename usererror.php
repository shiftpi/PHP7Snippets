<?php
try {
    trigger_error('trigger_error');                 // Not catched
    throw new Error('throw new Error');             // Catched
} catch (Throwable $t) {
    echo $t->getMessage();
}
