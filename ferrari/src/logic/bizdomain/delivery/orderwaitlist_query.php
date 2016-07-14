<?php
/**
 * 扫单发货中的信息列表
 */
class OrderWaitListQuery extends Query
{
	public function listOrderWait($search,$page,$pagesize,$total,$type)
	{
		$where = " WHERE o.isdelete='N' AND o.type='N' AND o.unusualid='0' AND o.orstatus='{$type}'";
		if (!empty($search)) {
			$where .=" AND (INSTR(o.onlineid,'{$search}') OR INSTR(c.name,'{$search}'))";
		}

		//分页
		if ($page && $pagesize)
		{
    		$sqlpage = ($page-1)*$pagesize;
			$splitpage =" GROUP BY o.onlineid ORDER BY o.createtime DESC LIMIT {$sqlpage},{$pagesize}";
		}

		if ($total == 'list') {
			$sql = "SELECT o.createtime,o.id AS orderid,o.onlineid,o.serviceid,
			s.id AS channelid,s.name AS channelname,
			d.type AS deltype,d.transportid,d.waybill,
			r.name AS storename,
			sum(p.total) AS prototal,
			g.name AS catename,
			c.name AS cusname,c.mobile,
			y.name AS shopname
			FROM orderinfo AS o
			LEFT JOIN companysales AS s ON s.id=o.channelid
			LEFT JOIN orderdeliver AS d ON d.orderid=o.id
			LEFT JOIN storeinfo AS r ON r.id=o.storeid
			LEFT JOIN orderproduct AS p ON p.orderid=o.id
			LEFT JOIN ordercategory AS g ON g.id=o.categoryid
			LEFT JOIN customerinfo AS c ON c.id=o.customerid
			LEFT JOIN systemshop AS y ON y.id=o.companyid".$where.$splitpage;

		} elseif ($total == 'total') {
			$sql = "SELECT count(distinct o.onlineid) AS total
			FROM orderinfo AS o
			LEFT JOIN companysales AS s ON s.id=o.channelid
			LEFT JOIN orderdeliver AS d ON d.orderid=o.id
			LEFT JOIN storeinfo AS r ON r.id=o.storeid
			LEFT JOIN orderproduct AS p ON p.orderid=o.id
			LEFT JOIN ordercategory AS g ON g.id=o.categoryid
			LEFT JOIN customerinfo AS c ON c.id=o.customerid
			LEFT JOIN systemshop AS y ON y.id=o.companyid".$where;
		}

		return $this->listByCmd($sql);
	}
}