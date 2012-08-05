
-- Postgres version of schema

CREATE TABLE rev_comment_supp (
  rcs_rev_id     INTEGER  NOT NULL PRIMARY KEY,
  rcs_user       INTEGER  NOT NULL,
  rcs_user_name  TEXT,
  rcs_timestamp  TIMESTAMPTZ,
  rcs_comment    TEXT
);
CREATE INDEX rcs_user_timestamp  ON rev_comment_supp (rcs_user,ac_timestamp);
CREATE INDEX rcs_revid           ON rev_comment_supp (rcs_rev_id);
