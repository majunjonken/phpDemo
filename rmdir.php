<?php
/**
 * ɾ��Ŀ¼��Ŀ¼�������ļ���ɾ��ָ���ļ�
 * @param str $path   ��ɾ��Ŀ¼·��
 * @param int $delDir �Ƿ�ɾ��Ŀ¼��1��trueɾ��Ŀ¼��0��false��ֻɾ���ļ�����Ŀ¼��������Ŀ¼��
 * @return bool ����ɾ��״̬
 */
function delDirAndFile($path, $delDir = FALSE) {
    $handle = opendir($path);
    if ($handle) {
        while (false !== ( $item = readdir($handle) )) {
            if ($item != "." && $item != "..")
                is_dir("$path/$item") ? delDirAndFile("$path/$item", $delDir) : unlink("$path/$item");
        }
        closedir($handle);
        if ($delDir)
            return rmdir($path);
    }else {
        if (file_exists($path)) {
            return unlink($path);
        } else {
            return FALSE;
        }
    }
}
var_dump(delDirAndFile("upload",true));
?>