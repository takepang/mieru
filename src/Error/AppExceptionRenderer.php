<?php
namespace App\Error;

use Cake\Error\ExceptionRenderer;
use Exception;
use Cake\Log\Log;
use App\Controller\AppErrorController;

/**
 * 独自例外用レンダラー
 *
 * Class AppExceptionRenderer
 * @package App\Error
 */
class AppExceptionRenderer extends ExceptionRenderer
{

    /**
     * 独自のコントローラーを指定
     * @param Exception $exception
     * @return AppErrorController
     */
    protected function _getController()
    {
        // 独自のコントローラーを指定
        return new AppErrorController();
    }

    /**
     * 独自のテンプレート名を指定
     *
     * @param Exception $exception
     * @param string $method
     * @param int $code
     * @return string
     */
    protected function _template(Exception $exception, $method, $code)
    {
        // src/Template/Error/error_custom.ctp
                return $this->template = "error_custom";
    }
}