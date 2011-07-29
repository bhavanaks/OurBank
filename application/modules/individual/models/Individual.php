<?php
/*
############################################################################
#  This file is part of OurBank.
############################################################################
#  OurBank is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as
#  published by the Free Software Foundation, either version 3 of the
#  License, or (at your option) any later version.
############################################################################
#  This program is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
############################################################################
#  You should have received a copy of the GNU Affero General Public License
#  along with this program.  If not, see <http://www.gnu.org/licenses/>.
############################################################################
*/
class Individual_Model_individual  extends Zend_Db_Table 
{
    protected $_name = 'ourbank_family';

    public function getMemberdetails()
    {
        $select=$this->select()
                        ->setIntegrityCheck(false)
                        ->join(array('a'=>'ourbank_familymember'),array('a.id'));
        $result=$this->fetchAll($select);
        return $result->toArray();
    }

   public function searchDetails($post)
        {
            $keyvalue = array_filter($post);
	    $searchcounter = count($keyvalue);
	if($searchcounter > 0) {
            $select=$this->select()
                            ->setIntegrityCheck(false)
                            ->join(array('a'=>'ourbank_family'),array('a.id'))
                            ->join(array('b'=>'ourbank_familymember'),'a.id = b.family_id')
                            ->where('b.name like "%" ? "%"',$post['s1']) 
                            ->where('a.village_id like "%" ? "%"',$post['s2'])
                            ->where('b.name_inregional like "%" ? "%"',$post['s3']);

                   $result=$this->fetchAll($select);
            return $result->toArray();
        }else{
                $select = $this->select()
			->setIntegrityCheck(false)  
                        ->join(array('a'=>'ourbank_family'),array('a.id'))
                        ->join(array('b'=>'ourbank_familymember'),'a.id = b.family_id');		
                        //die($select->__toString($select));

		$result = $this->fetchAll($select);
		return $result->toArray();
		}
	}
}


