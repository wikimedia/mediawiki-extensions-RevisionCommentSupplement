
-- Postgres version of schema

CREATE TABLE rev_comment_supp (
  rcs_rev_id     INTEGER  NOT NULL PRIMARY KEY,
  rcs_user       INTEGER  NOT NULL DEFAULT 0,
  rcs_user_text  TEXT  NOT NULL DEFAULT '',
  rcs_timestamp  TIMESTAMPTZ  NOT NULL,
  rcs_comment    TEXT  NOT NULL
);
CREATE UNIQUE INDEX rcs_rev_id ON rev_comment_supp (rcs_rev_id);
CREATE INDEX rcs_timestamp ON rev_comment_supp (rcs_timestamp,rcs_rev_id);
CREATE INDEX rcs_user_text ON rev_comment_supp (rcs_user_text,rcs_timestamp,rcs_rev_id);
