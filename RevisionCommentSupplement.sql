CREATE TABLE /*$wgDBprefix*/rev_comment_supp (
  --  rev_id
  rcs_rev_id int unsigned NOT NULL PRIMARY KEY,

  --  user_id
  rcs_user int unsigned NOT NULL default 0,

  rcs_user_name varchar(255) binary NOT NULL default '',

  -- last modified
  rcs_timestamp binary(14) NOT NULL default '',

  -- additional comment
  rcs_comment tinyblob NOT NULL

) /*$wgDBTableOptions*/;
CREATE INDEX /*i*/rcs_user_timestamp ON /*_*/rev_comment_supp (rcs_user,rcs_timestamp);
CREATE INDEX /*i*/rcs_revid ON /*_*/rev_comment_supp (rcs_rev_id);
