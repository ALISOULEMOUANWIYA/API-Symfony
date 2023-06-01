<?php

   namespace App\Utils;

use Symfony\Component\HttpFoundation\JsonResponse;

    class Globals
    {
        public function success(array $data = null , array $success =  ManifestHttp::SUCCESS) : JsonResponse
        {
            return new JsonResponse([
                "status" => $success["status"] ?? 1,
                "message" => $success["message"] ?? "Success",
                "data" => $data,
            ], $success["code"] ?? 200);
        }


        public function error(array $error =  ManifestHttp::ERROR) : JsonResponse
        {
            return new JsonResponse([
                "status" => $error["status"] ?? 0,
                "message" => $error["message"] ?? "error",
            ], $error["code"] ?? 500);
        }
    }


?>