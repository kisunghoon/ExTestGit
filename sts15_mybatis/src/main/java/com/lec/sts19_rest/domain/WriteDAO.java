package com.lec.sts19_rest.domain;

import java.util.List;

import org.apache.ibatis.annotations.Param;
import org.mybatis.spring.annotation.MapperScan;

@MapperScan
public interface WriteDAO {

	//전체 SELECT
	public abstract List<WriteDTO> select();
	
	//새글 작성 <--DTO
	public abstract int insert(WriteDTO dto);
	public abstract int insert(String subject,String content,String name);
	//특정 uid글 내용 읽기
	//viewcont 1증가 읽어온다
//	public abstract List<WriteDTO> readByUid(int uid);
	
	//특정 uid 글 수정
	public abstract int update(WriteDTO dto);
	public abstract int update(int uid, @Param("a") WriteDTO dto);
	
	//특정 글 삭제하기 
	public abstract int deleteByUid(int uid);
	
	//글 내용 읽기
	public abstract List<WriteDTO> selectByUid(int uid);
	
	//특정 uid글 조회수 증가 
	public abstract int incViewCnt(int uid);
	
	WriteDTO searchBySubject(String subject);
	
}
